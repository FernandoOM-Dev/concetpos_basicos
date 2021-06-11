@extends('layouts.base')

@section('content')
<!-- contact section start -->
<div class="collection_text">Contact Us</div>
<div class="layout_padding contact_section">
    <div class="container">
        <h1 class="new_text"><strong>Contact Now</strong></h1>
    </div>
    <div class="container-fluid ram">
        <div class="row">
            <div class="col-md-6">
                <div class="email_box">
                <div class="input_main">
                   <div class="container">
                      <form action="/action_page.php" method="POST">
                            @csrf
                            <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Name" name="name">
                            </div>
                            <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Phone Number" name="phone">
                            </div>
                            <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Email" name="email">
                            </div>

                            <div class="form-group">
                                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="user_message"></textarea>
                            </div>
                            <div class="send_btn">
                                <button class="main_bt">Send</button>
                            </div>
                      </form>
                   </div>
                </div>
        </div>
            </div>
            <div class="col-md-6">
                <div class="shop_banner">
                    <div class="our_shop">
                        <button class="out_shop_bt">Our Shop</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   <!-- contact section end -->
@endsection
