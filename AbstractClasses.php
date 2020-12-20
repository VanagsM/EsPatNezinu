<?php

// Tu nekad nevari izsaukt šo klasi 
abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        //FirstThousandPoints => First Thousand Points
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
        // Ko nozīmē $0 ? 
    }

    public function icon()
    {
        return strtolower(str_replace(' ','-',$this->name()).'.png');
    }

    // Ja klasei nebūs pievienota qualifier funckija tā nedarbosies.
    abstract public function qualifier($user);
}


class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
    
    }
}


class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {
        
    }
}


$achievement = new FirstThousandPoints();

echo $achievement->name();

echo "\n";

echo $achievement->icon();