<?php 

 header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');



 echo '
    [
        {
            "id": "1",
            "name": "Studio 3",
            "phone": "3333-333",
            "address" : "Rua Pio x , 10 , Bom Jesus , Porto Alegre , RS",
            "description": "This is a Facebook styled Card. The header is created from a Thumbnail List item, the content is from a card-body consisting of an image and paragraph text. The footer consists of tabs, icons aligned left, within the card-footer.",
            "img": "assets/img/salo-de-beleza-do-hairdressing-16167187.jpg",
            "collaborator" : [{"name" : "Joana - CAB"} ,{"name" : "pedrinho - CAB"} ,{"name" : "Sandra - DEP"} ,{"name" : "Maria - MANI"}]
        } ,
        {
            "id": "2",
            "name": "Studio 2",
            "phone": "3333-333",
            "address" : "Rua Pio x , 10 , Bom Jesus , Porto Alegre , RS",
            "description": "This is a Facebook styled Card. The header is created from a Thumbnail List item, the content is from a card-body consisting of an image and paragraph text. The footer consists of tabs, icons aligned left, within the card-footer.",
            "img": "assets/img/salo-de-beleza-do-hairdressing-16167187.jpg",
            "collaborator" : [{"name" : "Joana - CAB"} ,{"name" : "pedrinho - CAB"} ,{"name" : "Sandra - DEP"} ,{"name" : "Maria - MANI"}]
        } ,
        {
            "id": "3",
            "name": "Studio 3",
            "phone": "3333-333",
            "address" : "Rua Pio x , 10 , Bom Jesus , Porto Alegre , RS",
            "description": "This is a Facebook styled Card. The header is created from a Thumbnail List item, the content is from a card-body consisting of an image and paragraph text. The footer consists of tabs, icons aligned left, within the card-footer.",
            "img": "assets/img/salo-de-beleza-do-hairdressing-16167187.jpg",
            "collaborator" : [{"name" : "Joana - CAB"} ,{"name" : "pedrinho - CAB"} ,{"name" : "Sandra - DEP"} ,{"name" : "Maria - MANI"}]
        } 
    ]
';