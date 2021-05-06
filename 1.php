<?php

Interface Button
{
    public function onClick();
}

class WinButton implements Button
{
    public function onClick()
    {
        // Событие происходящее при нажатии на кнопку на Win
    }
}

class MacButton implements Button
{
    public function onClick()
    {
        // Событие происходящее при нажатии на кнопку на Mac
    }
}