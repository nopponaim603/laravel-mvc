<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create Product | Product Store</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        
    </head>
    <body>
        <div class="links">
        <a href="{{ config('app.url')}}">Home</a>
        </div>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <form method="POST" action="{{ config('app.url')}}/products">
                    @csrf
                    <h1> Enter Details to create a product</h1>

                    <div class="form-input">
                        <label>Name</label>
                        <input type="text" name="name">
                    </div>

                    <div class="form-input">
                        <label>Description</label>
                        <input type="text" name="description">
                    </div>

                    <div class="form-input">
                        <label>Count</label>
                        <input type="number" name="count">
                    </div>

                    <div class="form-input">
                        <label>Price</label>
                        <input type="number" name="price">
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>