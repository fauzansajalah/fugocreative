{{-- Footer / Subscription Section --}}
<div class="subscription-section" style="background-color: #afe507; padding: 60px 10%; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center;">
    
    {{-- Kolom Kiri --}}
    <div class="subscribe-left" style="flex: 1 1 400px; max-width: 600px; display: flex; flex-direction: column; gap: 10px;">
        <img src="{{ asset('img/logohitam.png') }}" alt="Fugo Logo" style="max-width: 500px;">
        <h2 style="font-size: 28px; color: #333; margin: 0;">
            Great design made affordable with our easy subscription plans.
        </h2>
        <p style="font-size: 16px; color: #333; margin: 0;">
            We bring top-notch graphics within reach for your business.
        </p>
    </div>

    {{-- Kolom Kanan --}}
    <div class="subscribe-right" style="flex: 1 1 400px; display: flex; flex-direction: column; gap: 20px; justify-content: center;">
        <!-- Tombol Subscribe tanpa box -->
        <button style="background: none; color: #44B486; font-size: 24px; padding: 0; border: none; cursor: pointer;">Subscribe Now</button>
        
        <!-- Teks info di bawah tombol -->
        <p style="font-size: 18px; color: #333; margin: 0;">
            Don’t miss our future updates! Get Subscribed Today!
        </p>

        <!-- Input email dengan icon di kanan -->
        <div style="position: relative; width: 100%; display: flex; justify-content: flex-end; align-items: center;">
            <input type="email" placeholder="Your mail here" style="padding: 12px 40px 12px 12px; border: none; border-bottom: 2px solid #00008B; font-size: 16px; outline: none; width: 100%;">
            <!-- Icon mail di pojok kanan dalam input -->
            <span style="position: absolute; right: 10px; color: #fff; background-color: #00008B; padding: 6px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                &#9993; <!-- unicode icon mail -->
            </span>
        </div>

        <!-- Copyright -->
        <p style="font-size: 14px; color: #333; margin-top: 10px;">
            © 2024 FUGO CREATIVE GROUP All Rights Reserved.
        </p>
    </div>

</div>








{{-- Cabang / Branch Section --}}
<div class="branch-section" style="background-color: #afe507; padding: 40px 10%; display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between; color: #333;">
    <div class="branch-left" style="flex: 1 1 300px; max-width: 400px;">
        <h3>Cabang 1</h3>
        <p>Jl. Example No. 123, Jakarta</p>
    </div>
    <div class="branch-right" style="flex: 1 1 300px; max-width: 400px;">
        <h3>Cabang 2</h3>
        <p>Jl. Example No. 456, Bandung</p>
    </div>
</div>
