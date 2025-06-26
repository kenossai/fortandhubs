<div class="dgm-brand-area fix">
                    <div class="dgm-brand-wrapper">
                        <div class="swiper-container dgm-brand-active">
                            <div class="swiper-wrapper">
                                @foreach ($clients as $client)
                                    <div class="swiper-slide">
                                        <div class="dgm-brand-item">
                                            <img src="{{ asset('storage/' . $client->image_path) }}" alt="{{ $client->name }}" width="100">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
