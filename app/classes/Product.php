<?php
namespace App\classes;
class Product
{

    protected $products;

    public function getAllProduct()
    {
        return
            [


                0=> [
                    'title' => 'Shirt',
                    'price'  => 'Tk. 550',
                    'brand' => 'Brand: easy',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Smart Shirt',
                    'image' => 'ss3.jpg',
                ],
                1=> [
                    'title' => 'T-Shirt',
                    'price'  => 'Tk. 900',
                    'brand' => 'Brand: TextPoint',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Smart T-Shirt',
                    'image' => 'ss1.jpg',
                ],
                2=> [
                    'title' => 'Zippo Lighter',
                    'price'  => 'Tk. 2200',
                    'brand' => 'Brand: B&H',
                    'category' => 'Category: medium',
                    'description'=> 'Desc: B&H Special Zippo Lighter',
                    'image' => 'ss4.jpg',
                ],
                3=> [
                    'title' => 'Key Ring',
                    'price'  => 'Tk. 550',
                    'brand' => 'Brand: Rick',
                    'category' => 'Category: deny',
                    'description'=> 'Desc: Smart Key ring',
                    'image' => 'ss5.jpg',
                ],
                4=> [
                    'title' => 'Perfume',
                    'price'  => 'Tk. 550',
                    'brand' => 'Brand: Rico',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Axe',
                    'image' => 'ss6.jpg',
                ],
                5=> [
                    'title' => 'Che Cap',
                    'price'  => '1100',
                    'brand' => 'Brand: Oi',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Smart Cap',
                    'image' => 'ss7.jpg',
                ],
                6=> [
                    'title' => 'Shoe',
                    'price'  => 'Tk. 550',
                    'brand' => 'Brand: Appex',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Smart shoe',
                    'image' => 'ss8.jpg',
                ],
                7=> [
                    'title' => 'Hand Watch',
                    'price'  => 'Tk. 550',
                    'brand' => 'Brand: Rist',
                    'category' => 'denim',
                    'description'=> 'Smart T-Shirt',
                    'image' => 'ss9.jpg',
                ],

                8=> [
                    'title' => 'Face Mask',
                    'price'  => '550',
                    'brand' => 'Brand: er',
                    'category' => 'Category: denim',
                    'description'=> 'Desc: Smart',
                    'image' => 'p2.jpg',
                ],
                9=> [
                    'title' => 'Shirt',
                    'price'  => '550',
                    'brand' => 'Rafan',
                    'category' => 'denim',
                    'description'=> 'Smart T-Shirt',
                    'image' => 'p2.jpg',
                ],
            ];
    }

}
