<?php
function info_about_triangle(triangle $triangle){

echo
    '<p>Цей трикутник -',$triangle->getType(),' </p>',
'<p>Його сторони відповіно дорівнюють  '
    ,$triangle->getSideA(),
    $triangle->getSideB(),
    $triangle->getSideC(),'</p>
    <p>Периметр трикутника дорівнює  ',
    $triangle->get_perimeter(),'</p><p>
    Площа трикутника дорівнює',$triangle->get_area(),'</p>';
}

class triangle
{
    private $sideA;
    private $sideB;
    private $sideC;
    private $type;

    /**
     * triangle constructor.
     * @param $sideA
     * @param $sideB
     * @param $sideC
     * @param $type
     */
    public function __construct($sideA, $sideB, $sideC, $type)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
        $this->type = $type;
    }
    /**
     * triangles constructor.
     * @param $sideA
     * @param $sideB
     * @param $sideC
     */


    /**
     * @param mixed $sideA
     */
    public function setSideA($sideA)
    {
        $this->sideA = $sideA;
    }

    /**
     * @param mixed $sideB
     */
    public function setSideB($sideB)
    {
        $this->sideB = $sideB;
    }

    /**
     * @param mixed $sideC
     */
    public function setSideC($sideC)
    {
        $this->sideC = $sideC;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return mixed
     */
    public function getSideA()
    {
        return $this->sideA;
    }

    /**
     * @return mixed
     */
    public function getSideB()
    {
        return $this->sideB;
    }

    /**
     * @return mixed
     */
    public function getSideC()
    {
        return $this->sideC;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

}
//різносторонній
class scalene_triangle extends triangle
{
    public function get_perimeter()
    {
        $perimeter = $this->getSideA() + $this->getSideB() + $this->getSideC();
        return $perimeter;
    }
    public function get_area()
    {
        $p=$this->get_perimeter()/2;
        $area = sqrt($p*($p-$this->getSideA())*($p-$this->getSideB())*($p-$this->getSideC()));
        return $area;
    }
}
//рівнобедрений
class isosceles_triangle extends scalene_triangle
{

}

//рівносторонній
class equilateral_triangle extends triangle
{

    public function get_perimeter()
    {
        $perimeter = 3 * $this->getSideA();
        return $perimeter;
    }
    public function get_area()
    {
        $area = ($this->getSideA()*$this->getSideA()*sqrt(3))/4;
        return $area;
    }
}

//прямокутний
class rectangular_triangle extends scalene_triangle
{

}