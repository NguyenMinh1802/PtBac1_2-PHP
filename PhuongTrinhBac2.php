<?php
require_once('PhuongTrinhBac1.php');
class PhuongTrinhBac2 extends PhuongTrinhBac1 {
    protected $c;

    public function __construct($a, $b, $c) {
        parent::__construct($a, $b);
        $this->c = $c;
    }

    public function getC() {
        return $this->c;
    }

    public function tinhDelta() {
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }

    public function giaiPhuongTrinh() {
        $delta = $this->tinhDelta();
        if ($delta < 0) {
            echo "Phương trình vô nghiệm!";
        } elseif ($delta === 0) {
            echo "Phương trình có nghiệm kép x = " . (-$this->b / 2 * $this->a);
        } else {
            $x1 = (-$this->b + sqrt($delta)) / 2 * $this->a;
            $x2 = (-$this->b - sqrt($delta)) / 2 * $this->a;
            echo "Phương trình có hai nghiệm: x1 = $x1, x2 = $x2";
        }
    }

    public function __toString() {
        return "Phương trình bậc 2: " . $this->a . "x^2 + " . $this->b . "x + " . $this->c . " = 0";
    }
}
?>
