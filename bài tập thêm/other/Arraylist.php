<?php

class Arraylist
{
    private $arrayList;

    public function __construct($arrayList = [])
    {
        $this->arrayList = $arrayList;
    }

    public function add($item)
    {
        array_push($this->arrayList, $item);
    }

    public function addAtPos($item, $index)
    {
        if (is_int($index)) {
            array_splice($this->arrayList, $index, 0, $item);
        } else {
            die("ERROR in ArrayList.addAtPos <br> The value of the index must be integer");
        }
    }

    public function removeByIndex($index)
    {
        if (!is_int($index)) {
            die("ERROR in ArrayList.removeByIndex <br> The value of the index must be integer");
        } else if ($index > $this->size()) {
            die("ERROR in ArrayList.removeByIndex <br> The value of the index must be less than size of array : " . $this->size());
        } else {
            array_splice($this->arrayList, $index, 1);

        }
    }

    public function contains($item)
    {
        in_array($item, $this->arrayList);
    }

    public function get($index)
    {
        if (is_int($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function toArray(){
        return $this->arrayList;
    }

    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }

    public function size()
    {
        return count($this->arrayList);
    }
}

?>