<?php
class RGBA {
    private $color;
    private $red;
    private $green;
    private $blue;
    private $opacity;

    public function __construct( $colorCode = '' ) {
        $this->color = ltrim( $colorCode, "#" );
        $this->parseColor();
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor( $colorCode ) {
        $this->color = ltrim( $colorCode, "#" );
        $this->parseColor();
    }

    public function getRGBAColor() {
        return array( $this->red, $this->green, $this->blue, $this->opacity );
    }

    public function readRGBAColor() {
        echo "$this->red $this->green $this->blue, $this->opacity%";
    }

    private function parseColor() {
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue, $this->opacity ) = sscanf( $this->color, "%02x%02x%02x%d" );
        } else {
            list( $this->red, $this->green, $this->blue, $this->opacity ) = array( 0, 0, 0, 1 );
        }
    }

}

// class myColors extends RGB{

// }

$color = new RGBA( "#ffdded30" );
$color->readRGBAColor();