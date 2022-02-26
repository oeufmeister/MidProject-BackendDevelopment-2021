
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        #formm {
            width: 300px;
            border: 5px solid grey;
            padding: 50px;
            margin: 20px;
            position: relative;
            bottom: 10px;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            }
    </style>
</head>
<body>
@include ('navbar')


<div class="container">
    <h1 class="title m-b-md" style="text-align: center; font-size: 84px; margin-bottom:35px">Courses</h1>
        <table class="table table-striped" style="font-size: 20px ;margin-bottom: 30px">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col" class="text-center">Courses</th>
                <th scope="col" class="text-nowrap text-center">Course Code</th>
                <th scope="col" class="text-center">Description</th>
                </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                    <td>C++</td>
                    <td>C_CPP</td>
                    <td>C++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs. C++ is portable and can be used to develop applications that can be adapted to multiple platforms. C++ is fun and easy to learn. This course tells you how to use it, and develop simple algorithms with it, good luck!</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                    <td>JavaScript</td>
                    <td>C_JS</td>
                    <td>JavaScript (often shortened to JS) is a lightweight, interpreted, object-oriented language with first-class functions, and is best known as the scripting language for Web pages, but it's used in many non-browser environments as well. This course will help you to understand the fundamentals of JavaScript, and hopefully you, the trainee, will be able to use it in a professional manner!</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                    <td>C#</td>
                    <td>C_CS</td>
                    <td>C# (pronounced "C-sharp") is an object-oriented programming language from Microsoft that aims to combine the computing power of C++ with the programming ease of Visual Basic. C# is based on C++ and contains features similar to those of Java. C# is designed to work with Microsoft's.</td>
                </tr>
                <th scope="row">4</th>
                    <td>Python</td>
                    <td>C_PY</td>
                    <td>Python is an interpreted, object-oriented, high-level programming language with dynamic semantics developed by Guido van Rossum. It was originally released in 1991. Designed to be easy as well as fun, the name "Python" is a nod to the British comedy group Monty Python.</td>
                </tr>
                <th scope="row">5</th>
                    <td>HTML/CSS</td>
                    <td>C_HC</td>
                    <td>HTML (the Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the structure of the page, CSS the (visual and aural) layout, for a variety of devices. Along with graphics and scripting, HTML and CSS are the basis of building Web pages and Web Applications.</td>
                </tr>
        </tbody>
    </table>
    <form id ="formm" method="post" action="{{ route('course.store') }}">
        @csrf
            <h1 class="subtitle m-b-md"  style="text-align: center; font-size: 20px; margin-bottom:10px">Pick Your Courses</h1>
            <div class="row">
                    <div class="span12 pagination-centered">
                    <div class="checkbox">
                        <label><input name="course[]" type="checkbox" value="c_plusplus"> C++</label>
                    </div>
                        <div class="checkbox">
                        <label><input name="course[]" type="checkbox" value="java_script"> JavaScript</label>
                    </div>
                    <div class="checkbox">
                        <label><input name="course[]" type="checkbox" value="c_sharp"> C#</label>
                    </div>
                    <div class="checkbox">
                        <label><input name="course[]" type="checkbox" value="python"> Python</label>
                    </div>
                    <div class="checkbox">
                        <label><input name="course[]" type="checkbox" value="html_css"> HTML/CSS</label>
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-sm">Submit</button>
            </div>
    </form>
</div>
@include('footer')

</body>    
</body>
</html>
