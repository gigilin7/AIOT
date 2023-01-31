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

<img src="https://user-images.githubusercontent.com/43805264/213118860-e16aec57-7337-42f9-bf52-4bc5f5123b11.png" width="300" />

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
<img src="https://user-images.githubusercontent.com/43805264/215700453-8e7f5d8b-c685-49b8-b8a9-39c36d6d132b.png" width="500" />
<img src="https://user-images.githubusercontent.com/43805264/215700721-f2bc460e-ad6c-4243-b6f4-704d1a61f046.png" width="500" />

## Part 3

+ 使用Part 2=From PHP to Flask Basics 資料夾(用裡面的step2資料夾)

<https://ithelp.ithome.com.tw/articles/10280076?sc=hot>
1. 使用 pickle 儲存模型
```
import pickle
with open('./model/xgboost-iris.pickle', 'wb') as f:
    pickle.dump(xgboostModel, f)
```
2. 使用 pickle 儲存模型並利用 gzip 壓縮
```
import pickle
import gzip
with gzip.GzipFile('.myModel.pgz', 'w') as f:
    pickle.dump(model, f)
```
+ 使用第2個方法放入myEA.py(在part1資料夾) 並執行得到myModel.pgz
+ 接著在EA.py(在step2資料夾)放入以下程式碼來讀取模型
```
with gzip.open('./myModel.pgz', 'r') as f:
    model = pickle.load(f)
```
<img src="https://user-images.githubusercontent.com/43805264/215708707-33322239-76a1-4322-8ef4-bea971cffb32.png" width="500" />

+ 接著重複以上方法，但改用SVC的模型(在part2步驟)
+ 使用第2個方法放入myEA.py(在part1資料夾) 並執行得到mySVCModel.pgz
+ 將mySVCModel.pgz放入step2資料夾
```
with gzip.open('./mySVCModel.pgz', 'r') as f:
    model = pickle.load(f)
```
<img src="https://user-images.githubusercontent.com/43805264/215708949-7525787d-c0fe-4f7f-ad02-8034108f17c9.png" width="500" />

## Part 4 (練習)

+ 自己寫一個app.py練習 (放在flask_test資料夾)

<img src="https://user-images.githubusercontent.com/43805264/215709217-f7ab0860-0a4c-4cbf-bb94-ff25380491d7.png" width="500" /><img src="https://user-images.githubusercontent.com/43805264/215709323-a3de5c26-4606-4997-a14f-7734d6a595b6.png" width="300" />

+ 建templates資料夾新增index2.html

<img src="https://user-images.githubusercontent.com/43805264/215709584-8e6e311e-6991-4ff3-8cf1-df7f68cb3dfb.png" width="500" />

<img src="https://user-images.githubusercontent.com/43805264/215709706-c0791694-9bf9-4fe5-bca5-0ea9d2761565.png" width="500" /><img src="https://user-images.githubusercontent.com/43805264/215709764-4f325d63-8f12-4bdd-b071-c5e23e5f6e5a.png" width="300" />

<img src="https://user-images.githubusercontent.com/43805264/215709786-d112a9ad-279c-42ca-8bdc-ef40dc298af1.png" width="400" />

## Part 4

+ 使用Part 2=From PHP to Flask Basics 資料夾(用裡面的step4資料夾)
+ 執行app.py得到下圖

<img src="https://user-images.githubusercontent.com/43805264/215710084-791ddd7b-4b35-44f9-82de-cd1dade8bef2.png" width="500" />

+ 我們要改成用自己的aiot程式
+ 將indexAI.html裡的getPredict改成getData
+ 在app.py新增以下程式碼

<img src="https://user-images.githubusercontent.com/43805264/215710265-6ee22c47-e3a0-404b-bc0a-ae468f271542.png" width="500" />

+ localhost:5000/AI

<img src="https://user-images.githubusercontent.com/43805264/215710425-16b1327f-0fd4-4b80-b197-6e98f85a9bcd.png" width="500" />

+ 應該是會呈現以下結果

<img src="https://user-images.githubusercontent.com/43805264/215710449-80895573-5900-44f3-a609-8a3330545452.png" width="500" />

## Part 5

+ 改成 ngrok 讓他有一個domain name

+ 做法: 

1. 先到https://ngrok.com/ 註冊帳號並下載https://ngrok.com/download
2. 登入後，到 ngrok Setup & Installation ，會看到 Connect your account，將 Token指令打在ngrok.exe
3. 在ngrok.exe輸入ngrok http "http://localhost:5000" --host-header="localhost:5000"就可以成功轉址了 (前提是localhost:5000要先開好)

<img src="https://user-images.githubusercontent.com/43805264/215711289-75469d29-3467-4d05-afed-04572bdc2336.png" width="500" />
<img src="https://user-images.githubusercontent.com/43805264/215711299-7a1429c8-c3d8-4675-8f69-56a763de7669.png" width="500" />

