
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Confirmation about your message </title>
    <meta name="description" content="Web desing services, making your website looks and positioned itself as the best, increase significantly the sales in your business.">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Hugo Carrizo Manzoni">
</head>

<body>
    <h1>Hello {{$msg->name}}, </h1>
    <h2>Thank you so much for contact me. I will answer as soon as possible</h2>
    <p>You send me the follows datas</p>
    <h2>{{$msg->email}} {{$msg->phone}}</h2>
    <p>Message:</p>
    <p>{{$msg->messages}}</p>
</body>

</html>