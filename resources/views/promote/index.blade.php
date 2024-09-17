@extends('layouts.promote')
@section('search.target', route('promote.index'))

@section('content')

<div class="col-md-12 fh5co-heading animate-box" style="margin-top: 5%;">
    {{-- <h2>Recommended menu</h2> --}}
    <div class="row">
<div id="fh5co-about" class="fh5co-section">
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-1 img-wrap animate-box" data-animate-effect="fadeInLeft">
    <img src="{{ asset('promote/images/IMG_0116.JPG') }}" alt="" class="custom-image">
</div>
<div class="col-md-5 col-md-push-1 animate-box">
    <div class="section-heading">
        <h2>Wedding Cafe</h2>
        <p>คาเฟ่ในสถานที่จัดงานแต่งงานที่มีบรรยากาศร่มรื่น เต็มไปด้วยมนต์เสน่ห์ของความรักและโรแมติก
        </p>
        <p>ทดลองเป็นเจ้าสาวฟรี เพื่อสร้างความประทับใจไม่รู้ลืม
            เครื่องดื่มและอาหารแสนอร่อยหลากหลายเมนูที่คัดสรรมาอย่างดี
            เหมาะสำหรับการพักผ่อนและเฉลิมฉลองในวันพิเศษ มาสัมผัสบรรยากาศแห่งความรักได้แล้ววันนี้</p>
        <p><a href="about.html" class="btn btn-primary btn-outline">Our History</a></p>
    </div>
</div>
</div>
</div>
</div>

<div id="fh5co-featured-menu" class="fh5co-section">
<div class="container">
<div class="row">
        <div class="col-md-6">
            <p>ยินดีต้อนรับเข้าสู่มุมโปรดของคุณ! และเมนูโปรดของคุณ</p>
        </div>
    </div>
</div>

</div>
<div class="row"></div>
<div class="col-md-4">
    <div class="fh5co-blog animate-box">
        <a href="#" class="blog-bg" style="background-image: url({{ asset('promote/images/coco.jpg') }});"></a>
        <div class="blog-text">

            <h3><a href="#">โกโก้นมปั่น</a></h3>
            <p>โกโก้ที่เข้มข้นกับนมลงตัว</p>

        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="fh5co-blog animate-box">
        <a href="#" class="blog-bg" style="background-image: url({{ asset('promote/images/milk.jpg') }});"></a>
        <div class="blog-text">

            <h3><a href="#">นมชมพู</a></h3>
            <p>นมชมพูกับสตอเบอรี่</p>
            <ul class="stuff">
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="fh5co-blog animate-box">
            <a href="productdetail.html" class="blog-bg"
                style="background-image: url({{ asset('promote/images/G8.JPG') }});"></a>
            <div class="blog-text">

                <h3><a href="productdetail.html">น้ำเก๊กฮวย</a></h3>
                <p>น้ำหวานที่ดีต่อสุขภาพ</p>
                <ul class="stuff">

                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
