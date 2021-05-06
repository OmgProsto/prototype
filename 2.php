<?php

Interface Checkbox
{
    public function onChecked();
}

class WinCheckbox implements Checkbox
{
    public function __construct ( /* цвет, варианты полученные по стороннему АПИ и тд */ )
    {
        // Много логики
    }

    public function onChecked()
    {
        // Событие происходящее при нажатии на чекбокс на Win
    }
}

class MacCheckbox implements Checkbox
{
    public function __construct ( /* цвет, варианты полученные по стороннему АПИ и тд */ )
    {
        // Много логики
    }

    public function onChecked()
    {
        // Событие происходящее при нажатии на чекбокс на Mac
    }
}