# Requirement
<img src="https://github.com/gigilin7/AIOT/blob/main/Web/requirement.jpg" width="600" />

# Solution
## Part 1
+ 準備trainN

<img src="https://user-images.githubusercontent.com/43805264/213117061-dac50534-f2d8-4e27-b9a6-d01830518546.png" width="500" />
<img src="https://user-images.githubusercontent.com/43805264/213117506-2a35aa63-a256-40e6-b0eb-da47d8468a0a.png" width="500" />

+ 打開XAMPP，按下start

<img src="https://user-images.githubusercontent.com/43805264/213117682-9942ff8c-8065-41c6-885c-813dbd326216.png" width="500" />
<img src="https://user-images.githubusercontent.com/43805264/213117816-b0da16c6-f6fd-4e7e-aebc-c50f1f5de056.png" width="500" />

+ 輸入localhost

<img src="https://user-images.githubusercontent.com/43805264/213117953-b9912600-dac1-4bdb-9cfa-2b141b46cdd3.png" width="500" />

+ 點進phpmyadmin

<img src="https://user-images.githubusercontent.com/43805264/213118079-a21d4568-400a-4797-941f-15d5e7306186.png" width="500" />

+ 新增使用者帳號 (帳號密碼皆為test123，權限全選)，接著按執行

<img src="https://user-images.githubusercontent.com/43805264/213118249-a6ed8e19-e938-4dd2-a415-6a2b8ff23a63.png" width="500" />
<img src="https://user-images.githubusercontent.com/43805264/213118321-2c34fa95-99d5-4ce1-a58a-20bb5501e61b.png" width="500" />

+ 再新增一個使用者帳號，步驟跟上面一樣，只有主機名稱改成localhost

<img src="https://user-images.githubusercontent.com/43805264/213118425-a7204f93-2f6e-455f-9ffb-a5aaa6597dac.png" width="500" />

+ 建立資料庫

<img src="https://user-images.githubusercontent.com/43805264/213118522-16f0ba06-2ec7-4459-949f-cc0bad8d5dee.png" width="500" />

+ 匯入Part 1 =PHP for AI\IoT  Web L14(ans)\aiot 資料夾裡的sensors，並按匯入

<img src="https://user-images.githubusercontent.com/43805264/213118623-32ecf083-7e0b-4e29-b556-29f8214ea950.png" width="500" />

+ 把Part 1 =PHP for AI\IoT  Web L14(ans)裡面的aiot\ 放入 xampp\htdocs\ 
+ 接著輸入localhost/aiot/

<img src="https://user-images.githubusercontent.com/43805264/213118731-abb852d9-4349-4e0c-9441-cdab79d30e8a.png" width="500" />

+ 將train的status改成=IF(A2>300,1,0)

<img src="https://user-images.githubusercontent.com/43805264/213118860-e16aec57-7337-42f9-bf52-4bc5f5123b11.png" width="500" />

+ 執行Part 1 =PHP for AI\IoT  Web L14(ans)\AI module (local) 裡面的myEA
+ 重整localhost/aiot/

<img src="https://user-images.githubusercontent.com/43805264/213119023-1253d8b1-cec3-4863-96cb-6537ad06def4.png" width="500" />

## Part 2

+ 使用Part 1 =PHP for AI 資料夾
```
from sklearn import svm
data=pd.read_csv("trainN.csv")
model=svm.SVC()
```
待續
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
<img src="" width="500" />
