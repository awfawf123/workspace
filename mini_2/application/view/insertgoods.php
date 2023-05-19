<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/application/view/css/list.css" type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div style="text-align:center;padding:20px;">
<h3>제품등록하기</h3>
</div>
    <form action="/product/insertgoods" method="POST" enctype="multipart/form-data">
        <table class="table table-sm table-bordered">
          <tbody>
          <tr>
            <th scope="row" class="thst">카테고리선택</th>
            <td>
                <div class="row g-3">
                    <div class="col-md-4">
                        <select class="form-select" name="li_category" id="li_category" aria-label="Default select example">
                            <option value="신제품">신제품</option>
                            <option value="추천제품">추천제품</option>
                            <option value="베스트셀러">베스트셀러</option>
                        </select>
                    </div>
                </div>
            </td>
          </tr>
          <tr>
            <th scope="row" class="thst">제품명</th>
            <td><input type="text" class="form-control" name="li_name" id="li_name"></td>
          </tr>
          <tr>
            <th scope="row" class="thst">가격</th>
            <td><input type="text" class="form-control" name="li_price" id="li_price"></td>
          </tr>
          <tr>
            <th scope="row" class="thst">판매종료일</th>
            <td>
                <input type="text" class="form-control" style="width: 272px;" name="li_end_date" id="li_end_date" value="<?php echo date("Y-m-d",strtotime("+6 month"))?>">
            </td>
          </tr>
          <tr>
            <th scope="row" class="thst">제품상세설명</th>
            <td>
            <div class="form-floating">
                <textarea class="form-control" id="floatingTextarea" style="height: 200px" name="li_cont"></textarea>
                <label for="floatingTextarea">설명</label>
            </div>
            </td>
          </tr>
          <tr>
            <th scope="row" class="thst">이미지첨부</th>
            <td><input type="file" class="form-control" name="li_imgfile" id="li_imgfile" onchange="readURL(this);" ></td>
          </tr>
          <tr>
            <th scope="row" class="thst">이미지미리보기</th>
            <td><img id="preview" style="height: 200px"/></td>
          </tr>
          </tbody>
        </table>
        <button class="btn btn-primary" type="submit">등록완료</button>
        </form>
        <script>
          function readURL(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
              };
              reader.readAsDataURL(input.files[0]);
            } else {
              document.getElementById('preview').src = "";
            }
          }
        </script>
         
</body>
</html>