<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>portfolio</title>
    <style>
        .contact-message{
            background:#3498db;
            padding:15px 25px;
            border-left: 6px solid #2c3e50;
            text-transform: capitalize;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
        }
        h1{
            color:#fff;
            margin-bottom: 20px
        }
        ul{
            list-style: none;
            padding-left: 0
        }
        ul li {
            margin-bottom:10px
        }
        ul li span{
            background:#fff;
            border-radius: 5px;
            display: inline-block;
            padding:5px 8px;
            text-align: center;
            min-width: 90px;
        }
        ul li p{
            color:#fff;
            margin-left: 8px;
            font-size: 16px;
            display: inline-block
        }
        ul li:last-of-type p {
            display: block
        }
    </style>
</head>
<body>
    <div class="contact-message">

        <h1>hello youussef message from portfolio contact form</h1>
        <ul>
            <li><span>name</span> <p> {{ $contact['name'] }} </p></li>
            <li><span>phone</span> <p> {{ $contact['phone'] }} </p></li>
            <li><span>email</span> <p> {{ $contact['email'] }} </p></li>
            <li><span>subject</span> <p> {{ $contact['subject'] }} </p></li>
            <li><span>message</span> <p> {{ $contact['message'] }} </p></li>
        </ul>
    </div>
</body>
</html>
