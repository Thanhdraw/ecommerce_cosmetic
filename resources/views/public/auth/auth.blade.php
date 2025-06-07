<!-- Login Modal -->
    <dialog id="login_modal" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg mb-4">Đăng nhập</h3>
            <form class="space-y-4">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" placeholder="Nhập email của bạn" class="input input-bordered" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Mật khẩu</span>
                    </label>
                    <input type="password" placeholder="Nhập mật khẩu" class="input input-bordered" />
                </div>
                <div class="form-control">
                    <label class="cursor-pointer label justify-start gap-2">
                        <input type="checkbox" class="checkbox checkbox-primary" />
                        <span class="label-text">Ghi nhớ đăng nhập</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-full">Đăng nhập</button>
                <div class="text-center">
                    <a href="#" class="link link-primary text-sm">Quên mật khẩu?</a>
                </div>
                <div class="divider">HOẶC</div>
                <button type="button" class="btn btn-outline w-full">
                    <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                        <path fill="currentColor"
                            d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                        <path fill="currentColor"
                            d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                        <path fill="currentColor"
                            d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                    </svg>
                    Đăng nhập với Google
                </button>
            </form>
        </div>
    </dialog>

    <!-- Register Modal -->
    <dialog id="register_modal" class="modal">
        <div class="modal-box">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="font-bold text-lg mb-4">Đăng ký tài khoản</h3>
            <form class="space-y-4">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Họ và tên</span>
                    </label>
                    <input type="text" placeholder="Nhập họ và tên" class="input input-bordered" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <input type="email" placeholder="Nhập email của bạn" class="input input-bordered" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Mật khẩu</span>
                    </label>
                    <input type="password" placeholder="Nhập mật khẩu" class="input input-bordered" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Xác nhận mật khẩu</span>
                    </label>
                    <input type="password" placeholder="Nhập lại mật khẩu" class="input input-bordered" />
                </div>
                <div class="form-control">
                    <label class="cursor-pointer label justify-start gap-2">
                        <input type="checkbox" class="checkbox checkbox-primary" />
                        <span class="label-text">Tôi đồng ý với <a href="#" class="link link-primary">điều
                                khoản sử dụng</a></span>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-full">Đăng ký</button>
                <div class="text-center">
                    <span class="text-sm">Đã có tài khoản? <a href="#" class="link link-primary"
                            onclick="register_modal.close(); login_modal.showModal()">Đăng nhập ngay</a></span>
                </div>
            </form>
        </div>
    </dialog>
