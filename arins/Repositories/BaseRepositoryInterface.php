<?php

namespace Arins\Repositories;

interface BaseRepositoryInterface
{
    function all();
    function find($id);
    function getId();
    function getFirst();
    function getLast();

    function getFillable();
    function getInputField();
    function getValidateInput();
    function getValidateField();

    function create($inputData);
    function update($record, $inputData);
    function delete($record);

    function allOrderByIdDesc();
    function allOrderByDateAndIdDesc();
    function allOrderByDateAndIdDescTake($numberOfRecords);

}