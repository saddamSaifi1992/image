**#Image**



```
$path = "./images/pexels-photo-1209843.jpeg";


$image = new  ImageGenerator;
$image->width = 200;
$image->height = 400;

$image->loadFile($path)->filter();
$image->filter->brightness(70);
$image->filter->pixelate(5);
$image->filter->scatter(5);
$image->filter->smooth(10);
$image->filter->meanRemoval(10);
$image->filter->gaussianBlur(150);
$image->filter->negetive();
$image->filter->contrast(30);
$image->filter->colorize(130);

$image->png()->print();
die();
```

#builder
```
$builder = new Builder(new  ImageGenerator);
$builder->img->width = 200;
$builder->img->height = 100;
$builder->img->text = "This is my demo";
$builder->img->size_center_x = 200;
$builder->img->size_center_y = 200;
$builder->img->size_width = 250;
$builder->img->size_height = 250;
echo $builder->captacha();
die();
```




#screen shot
```
$image->width = 200;
$image->height = 100;
 

$image->screenShot();
echo $image->filterInicilization()->png()->print();
die();
```

```
$image->tranparent()
     ->setHex("#ffffff")
     ->setBgColor('#27ae60')
     ->randomLine()
     ->randomLine()
     ->randomLine()
     ->randomLine()
     ->randomLine()
     ->line(null)
     ->line(null, 10, 10, 200, 100)
     ->string();
     ->png();
```
 

 
```
 $values = array(
    00,  00,  // Point 1 (x, y)
     100,  200, // Point 2 (x, y)
     200, 400,  // Point 3 (x, y)
    400, 00,  // Point 4 (x, y)
     200, 300,  // Point 5 (x, y)
     00,  00   // Point 6 (x, y)
 );
 $values2 = array(
     00,  00,  // Point 1 (x, y)
     50,  87, // Point 2 (x, y)
     200, 350,  // Point 3 (x, y)
     400, 00,  // Point 4 (x, y)
     200, 300,  // Point 5 (x, y)
     00,  00   // Point 6 (x, y)
 );
 echo $image->tranparent()->setHex("#fff")
     ->border(200, 200, '#27ae60')
     ->ellipse(200, 200, 300, 300, '#8e44ad')
     ->rectangle(100, 100, 300, 300, '#2c3e50')
     ->polygon($values, '#2c3e50', 6)
     ->polygon($values2, '#f1c40f', 6)
     ->png();
```

```
 echo $image->setHex("#2980b9")->tranparent()->ellipse(200, 200, 300, 300);
```

```
echo $image->setHex("#e74c3c")->tranparent()
     ->rectangle(10, 10, 390, 390)
     ->rectangle(20, 20, 380, 380, '#8e44ad')
     ->rectangle(30, 30, 370, 370, '#2c3e50')
     ->rectangle(40, 40, 360, 360, '#27ae60')
     ->rectangle(50, 50, 350, 350, '#f1c40f')
     ->ellipse(200, 200, 300, 300, '#8e44ad')
     ->ellipse(200, 200, 290, 290, '#2c3e50')
     ->ellipse(200, 200, 280, 280, '#27ae60')
     ->ellipse(200, 200, 270, 270, '#f1c40f')
     ->png();
```
