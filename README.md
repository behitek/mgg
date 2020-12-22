# mgg
Plugin shortcode mã giảm giá Wordpress

# Demo
Có 2 loại: mã giảm giá (có mã) & ưu đãi (truy cập tới link đích luôn)

## Mã giảm giá
- logo: đường dẫn tới ảnh logo
- title: Tiêu đề của MGG
- code: Mã giảm giá, không được để trống. Nếu để trống thì sẽ thuộc loại **Ưu đãi**
- url: URL đích
- content: mô tả thông tin MGG
- expire: điền ngày hết hạn, hoặc điền một giá trị `x` bất kỳ, hạn sử dụng sẽ hiển thị là thời điểm người dùng xem cộng thêm `x` ngày.

```php
[sc_coupon 
  logo="https://nguyenvanhieu.vn/images/ltkk.png" code="LTKK" 
  title="Khóa học lập trình C miễn phí 100%" 
  url="https://nguyenvanhieu.vn/khoa-hoc-lap-trinh-c/"  
  content="Khóa học lập trình C từ cơ bản đến nâng cao đi cùng với ưu tiên thực hành qua vô vàn các bài tập lập trình đang có ưu đãi lên đến 100%" 
  expire="5"]
```

Kết quả:

![](https://i.imgur.com/dJSxfCB.png)

Khi nhấp vào **Lấy mã**:

![](https://i.imgur.com/IvBa5Et.png)

## Ưu đãi

- Giống như **Mã giảm giá**, chỉ cần bỏ đi trường `code` là ok!

Kết quả:

![](https://i.imgur.com/7TOU14L.png)
