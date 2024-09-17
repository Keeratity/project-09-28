@extends('layouts.promote')
@section('search.target', route('promote.index'))

@section('content')

<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
style="background-image: url('{{ asset('promote/images/PP1.JPG') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="display-t js-fullheight">
                    <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">

                        <h2>Wedding cafe<a href="https://www.facebook.com/profile.php?id=100070443751850"
                                target="_blank"> @The land of love</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-featured-menu" class="fh5co-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 fh5co-heading animate-box">
                <h2>Our Delicous Menu</h2>
                <div class="row">
                    <div class="col-md-6">
                        <p>ยินดีต้อนรับเข้าสู่มุมโปรดของคุณ! พบกับเมนูแนะนำที่เราคัดสรรมาเป็นพิเศษ เพื่อเติมเต็มทุกวันของคุณให้สดใส ลิ้มรสชาติที่ลงตัวและหอมหวาน ที่จะทำให้คุณหลงรักตั้งแต่คำแรกจนคำสุดท้าย</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($products as $product)

                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="productdetail.html" class="blog-bg"
                            style="background-image: url({{ asset('backend/product/' . $product->image) }});"></a>
                        <div class="blog-text text-center">
                            <h3>
                                <a href="#">
                                    {{ $product->name }}
                                </a>
                            </h3>
                            <p>
                                {{ $product->description }}
                            </p>
                            <ul class="stuff">
                                ราคา {{ number_format($product->price, 2) }} บาท
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
</div>

@endsection
            {{-- <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="" class="blog-bg" style="background-image: url(images/coco.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">โกโก้นมปั่น</a></h3>
                        <p>โกโก้ที่เข้มข้นกับนมลงตัว</p>
                        <ul class="stuff">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-bg" style="background-image: url(images/G2.JPG);"></a>
                    <div class="blog-text">
                        <h3><a href="#">ยำหมูยอ</a></h3>
                        <p>ยำหมูยอกินคู่กับน้ำเก๊กฮวยเข้ากัน</p>
                        <ul class="stuff">

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="productdetail.html" class="blog-bg"
                            style="background-image: url(images/realthaitea.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="productdetail.html">ชาไทย</a></h3>
                            <p>ชาไทยยุคใหม่ที่เข้ากับคนยุคใหม่</p>
                            <ul class="stuff">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg" style="background-image: url(images/thaitea.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="#">ชามะลี</a></h3>
                            <p>ชามะลีที่หอมหวาน</p>
                            <ul class="stuff">
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg" style="background-image: url(images/milk.jpg);"></a>
                        <div class="blog-text">
                            <h3><a href="#">นมชมพู</a></h3>
                            <p>นมชมพูกับสตอเบอรี่</p>
                            <ul class="stuff">
                            </ul>
                        </div>
                    </div>
                </div> --}}


