<?php
interface ArrayAccess {
    public function offsetExists (bool $offset);
    public function offsetGet($offset);
    public function offsetSet($offset, $value);
    public function offsetUnset($offset);
}