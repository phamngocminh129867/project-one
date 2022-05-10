<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="ckfinder/ckfinder.js"></script>
    <title> Danh mục sản phẩm</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        color: black;
        outline: none;
    }
    
    a {
        text-decoration: none;
    }
    
    ul {
        list-style: none;
    }
    
    header {
        height: 100px;
        width: 100vw;
        text-align: center;
        border-bottom: 2px solid #ddd;
    }
    
    .admin-content {
        padding-top: 50px;
        display: flex;
    }
    
    .admin-content-left {
        background-color: #dddd;
        width: 20%;
        height: 100vh;
        padding: 30px 0 0 12px;
    }
    
    .admin-content-left>ul>li>a {
        font-weight: bold;
    }
    
    .admin-content-left ul li {
        margin: 6px 0;
    }
    
    .admin-content-left ul ul {
        margin-left: 20px;
    }
    
    .admin-content-right {
        width: 80%;
        padding: 30px 0 0 12px;
    }
    
    .admin-content-right-cartegory_add input {
        height: 30px;
        width: 200px;
        padding-left: 12px;
        margin-top: 20px;
    }
    
    .admin-content-right-cartegory_add button {
        display: block;
        margin-top: 10px;
        height: 30px;
        width: 100px;
        cursor: pointer;
        background-color: brown;
        border: none;
        color: white;
    }
    
    .admin-content-right-cartegory_add button:hover {
        background-color: transparent;
        border: 1px solid brown;
        color: black;
    }
</style>

<body>
    <header>
        <h1>Top</h1>
    </header>