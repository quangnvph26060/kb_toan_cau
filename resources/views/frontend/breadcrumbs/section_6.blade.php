<div class="ladi-section-background"></div>
<div class="ladi-container">
    <div id="IMAGE10" class="ladi-element">
        <div class="ladi-image ladi-transition">
            <div class="ladi-image-background" style="background-image: url(frontend/assets/images/bgr.png)">

                <div class="info-container">
                    <div class="logo-container">
                        <img style="width: 50%;" src="{{ showImage($config->logo) }}" alt="Maia & Maia Logo"
                            class="logo">
                    </div>
                    <h1>{{ $config->name }}</h1>



                    @foreach ($config->branches as $branch)
                        <div class="branch">
                            <h2>{{ $branch->name }}</h2>
                            <ul>
                                @foreach ($branch->address as $item)
                                    <li>{{ $item }}</li>
                                @endforeach

                            </ul>
                        </div>
                    @endforeach

                    {{-- <div class="branch">
                        <h2>Cơ Sở Bắc Ninh</h2>
                        <p>Số 197, Đường Lê Thánh Tông, Phường Võ Cường, Thành phố Bắc Ninh</p>
                    </div> --}}

                    <div class="contact-info">
                        <p><span class="icon">📞</span> Hotline: {{$config->hotline}}</p>
                        <p><span class="icon">📄</span> MS thuế: {{$config->tax_code}}</p>
                        <p><span class="icon">🔒</span> Chính sách bảo mật thông tin</p>
                    </div>

                    <div class="footer-note">
                        <p>*Tuỳ tình trạng từng bệnh nhân. Bác sĩ sẽ thăm khám và đưa phác đồ điều trị phù hợp. Kết quả
                            tuỳ thuộc vào cơ địa mỗi người.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
