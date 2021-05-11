<?php

namespace src;

class EmployeeManager
{
    protected static $employee ;
    protected string $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function getDataToFile(){
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson,true);
    }

    function getData(): array {
        $data = $this->getDataToFile();
        self::$employee = [];
        foreach ($data as $item){
            $employee = new Employee($item);
            self::$employee[] = $employee;
        }
        return self::$employee;
    }

    function saveDataToFile($newArray){
        $dataJson = json_encode($newArray);
        file_put_contents($this->filePath, $dataJson);
    }

    function addData($item){
        $data = $this->getDataToFile();
        array_push($data, $item);
        $this->saveDataToFile($data);
    }


    function findByIndex($index): Employee
    {
        $data = $this->getDataToFile();
        $item = $data[$index];
        return new Employee($item);
    }

    function deleteData($index){
        $data = $this->getDataToFile();
        array_splice($data, $index, 1);
        $this->saveDataToFile($data);
    }

    function editData($index, $item){
        $data = $this->getDataToFile();
        $data[$index] = $item;
        $this->saveDataToFile($data);
    }



}