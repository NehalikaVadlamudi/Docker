<?php

interface DatabaseConnection{
    public function getDsn():string;
}