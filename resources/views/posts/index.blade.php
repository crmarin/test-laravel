@extends('layouts.app')

@section('title', 'Learning Laravel')

@section('content')

    <div class="container">

        <div class="title">
            <p class="style_title">CONTACT FORM</p>
        </div>

        <div class="panels">

            <div></div>
            <div>
                <form action="/posts" method="POST">
                    <div class="center_panel">

                        <div class="form_panel">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="YOUR NAME">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="email"
                                    placeholder="YOUR EMAIL ADDRESS">
                            </div>
                            <div class="form-group two_inputs">
                                <input type="text" class="form-control" id="name" name="company" placeholder="COMPANY">
                                <input type="text" class="form-control" id="name" name="phone" placeholder="PHONE">
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="3" cols="50"
                                    placeholder="YOUR MESSAGE"></textarea>
                            </div>
                        </div>
                        <div>
                            <p class="t t1">YOU CAN FIND US HERE</p>
                            <p class="t t2">SAMPLE ADDRESS. SAMPLE STREET.123/45 <br><a class="a_style"
                                    href="https://www.google.com/maps">OR ON
                                    MAPS</a></p>
                            <ul>
                                <li class="t">
                                    +3 (000) 012325455
                                </li>
                                <li class="t">
                                    +3 (000) 012325455
                                </li>
                            </ul>
                        </div>
                        <div class="btn_position">
                            <button type="submit" class="btn btn_submit">SEND MESSAGE</button>
                        </div>
                        <div>

                        </div>
                    </div>
                </form>
            </div>

            {{-- <div class="panel2">
                
            </div> --}}

            <div></div>
        </div>

    </div>

    <br>

    <hr>

    <?php if (isset($_POST) && !empty($_POST)): ?>

    <div class="container">

        <div class="panel3">
            <div>
                <p class="t t1">Thanks for submit</p>
                <p class="t t2">This are your data</p>
                <ul>
                    <li class="t">
                        <?php echo 'YOUR NAME: ' . $_POST['name']; ?>
                    </li>
                    <li class="t">
                        <?php echo 'YOUR EMAIL: ' . $_POST['email']; ?>
                    </li>
                    <li class="t">
                        <?php echo 'COMPANY ' . $_POST['company']; ?>
                    </li>
                    <li class="t">
                        <?php echo 'PHONE: ' . $_POST['phone']; ?>
                    </li>
                    <li class="t">
                        <?php echo 'YOUR MESSAGE: ' . $_POST['message']; ?>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <?php endif; ?>

@endsection
