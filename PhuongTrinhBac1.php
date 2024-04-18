<?php
class PhuongTrinhBac1 {
    protected $a;
    protected $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA() {
        return $this->a;
    }

    public function getB() {
        return $this->b;
    }

    public function giaiPhuongTrinh() {
        if ($this->a === 0) {
            if ($this->b === 0) {
                echo "Phương trình vô số nghiệm!";
            } else {
                echo "Phương trình vô nghiệm!";
            }
        } else {
            echo "Phương trình có nghiệm duy nhất x = " . (-$this->b / $this->a);
        }
    }

    public function __toString() {
        return "Phương trình bậc 1: " . $this->a . "x + " . $this->b . " = 0";
    }
}
?>

