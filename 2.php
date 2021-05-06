<?php

Interface Checkbox
{
    public function onChecked();
}

class WinCheckbox implements Checkbox
{
    public function onChecked()
    {
        // Событие происходящее при нажатии на чекбокс на Win
    }
}

class MacCheckbox implements Checkbox
{
    public function onChecked()
    {
        // Событие происходящее при нажатии на чекбокс на Mac
    }
}