<?php

class Result {
    protected $name, $numbers, $ans;

    public function __construct( $shapeName, ...$num ) {
        $this->name = $shapeName;
        $this->numbers = $num;
        $this->calculateAnswer();

        // echo $this->numbers[0];
    }
    public function getAnswer() {
      echo "{$this->name} of : {$this->ans} comes from ";
      foreach($this->numbers as $myNum){
        echo $myNum.",";
      }
      echo PHP_EOL;
    }
    public function calculateAnswer() {}
}

class Sum extends Result {
    protected $a, $b, $c;
    public function __construct( $a, $b, $c ) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct( 'Sum', $a, $b, $c );
    }

    public function calculateAnswer() {
        $sum = $this->a + $this->b + $this->c;
        $this->ans = $sum;
    }
   
}

class Div extends Result {
  protected $a, $b;
  public function __construct( $a, $b ) {
      $this->a = $a;
      $this->b = $b;
      parent::__construct( 'Div', $a, $b );
  }

  public function calculateAnswer() {
      $div = $this->a / $this->b ;
      $this->ans = $div;
  }
 
}

$summ = new Sum(1,2,3);
$summ->getAnswer();

$div = new Div(6,2);
$div->getAnswer();