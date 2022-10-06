<?php
class Compte {
    private $user;
    private $diners;
    private $cuenta;
    private $moneder;

    /**
     * @param string $user
     * @param int $diners
     */
    public function __construct1()
    {
    }

    public function __construct($user, $diners)
    {
        $this->user = $user;
        $this->diners = $diners;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getdiners()
    {
        return $this->diners;
    }

    /**
     * @param int $diners
     */
    public function setDiners($diners)
    {
        $this->diners = $diners;
    }
    function afegirDiners($x)
    {
        $sumaDiners = $this->getdiners() + $x;
        $this->setDiners($sumaDiners);
        return $sumaDiners;
    }

    function treureDiners($y) {
        $restaDiners = $this->getdiners() - $y;
        $this->setDiners($restaDiners);
        return $restaDiners;
    }
}

$cuenta = new Compte("Matias",2000);
echo "". $cuenta->treureDiners(500). "<br>";

echo "". $cuenta->afegirDiners(500);
?>