I. Phân tích dự án
    - yêu cầu từ khách hàng
        + tên cửa hàng: Pascal Imitation Jewellery
        + trang chủ phải mô tả được các điểm nổi bật của cửa hàng và các liên kết chuyển trang => home
        + sản phẩm được phân loại theo 'Brand(Thương hiệu)' => category
        + danh mục phụ thể hiện chất liệu sản phẩm với các loại Nguyên bản(Original), bán quý(semi Precious), nhân tạo(Artificial) => sub-category
        + mô tả sản phẩm + hình ảnh => chi tiết sản phẩm
        + so sánh sản phẩm giống nhau nhưng khác chất liệu
        + trang liên hệ có địa chỉ công ty(hiển thị bằng GeoLocation API như google map) và địa chỉ email => contact us
        + About us
        + Feed back
        + Gallery section should be added(phần thư viện nên được thêm vào) => ?
        + navigation must be smooth (phần điều hướng phải thông suốt)
    
    - Frond-end
        - User 
            + trang chủ
            + trang danh sách sản phẩm
            + trang chi tiết sản phẩm
            + trang so sánh sản phẩm -> làm giống trang giỏ hàng -> sử dụng session
            + trang contact us
            + trang about us
            + trang feed back

        - Admin
            + tài khoản admin (hiển thị, thêm, sửa, xóa thông tin admin) -> đăng ký, đăng nhập 
            + quản lý sản phẩm (hiển thị, thêm, sửa, xóa)
            + hiển thị Feed back 

    - Back-end
        + sử dụng ngôn ngữ PHP thuần để lập trình dự án
        + sử dụng .htaccess để viết lại url
        + sử dụng mô hình mvc
        + sử dụng md5 để mã hóa password
        + sử dụng transaction

II. Công việc cần làm    
    - định hình database -> done

    - account -> create -> done
            -> show -> done
            -> edit -> done
            -> delete -> done

    - product -> create ->done
            -> show -> doing
            -> edit -> done (img not done)
            -> soft delete -> done

    - recycle -> restore -> done
            -> force delete -> done

    - brand -> create -> done
            -> show -> done
            -> edit -> done
            -> delete
    
    - category -> create -> done
         -> show -> done
         -> edit -> done
         -> delete

    - gemstone -> create -> done
         -> show -> done
         -> liên kết product <-> gemstone -> done
         -> edit -> done
         -> delete -> done

    - material -> create ->done
         -> show -> done
         -> edit -> done
         -> delete 

    - size -> create -> done
        -> show -> done
        -> liên kết product<-> size -> done
        -> edit -> done
        -> delete -> done

III. URL
    - admin: 
        + /project/admin/login
            -> đăng nhập admin
            
        + /project/admin/register
            -> tạo tài khoản admin/user
            
        + /project/admin/adminAccount
            -> hiển thị tài khoản admin
            
        + /project/admin/userAccount
            -> hiển thị tài khoản user
            
        + /project/admin/product
            -> hiển thị danh sách sản phẩm
            
        + /project/admin/createProduct
            -> tạo mới sản phẩm
            
        + /project/admin/editProduct
            -> cập nhật thông tin sản phẩm
            
        + /project/admin/category
            -> hiển thị và tạo mới danh mục sản phẩm
            
        + /project/admin/editCategory
            -> cập nhật thông tin danh mục sản phẩm
            
        + /project/admin/gemstone
            -> hiển thị và tạo mới đá quý
            
        + /project/admin/editGemstone
            -> cập nhật thông tin đá quý
            
        + /project/admin/material
            -> hiển thị và tạo mới chất liệu
            
        + /project/admin/editMaterial
            -> cập nhật thông tin chất liệu
            
        + /project/admin/brand
            -> hiển thị và tạo mới thương hiệu
            
        + /project/admin/editBrand
            -> cập nhật thông tin thương hiệu
            
        + /project/admin/size
            -> hiển thị và tạo mới kích cỡ sản phẩm
            
        + /project/admin/editSize
            -> cập nhật thông tin kích cỡ sản phẩm
            
        + /project/admin/recycle
            -> hiển thị sản phẩm bị xóa
            

