Custom Module Attribuite Customer</br>
I. Các bước pull code và chạy module</br>
B1: Tạo folder app/code/AHT/AttributeCustomer</br>
B2: Chạy trong terminal: git clone https://github.com/trunghung0910/AttributeCustomer</br>
B3: chạy các lệnh trong terminal: bin/magento setup:upgrade && bin/magento setup:di:compile && bin/magento c:c && bin/magento s:s:d -f</br>
B4: Hoàn thành.</br>

II. Đề bài custom module</br>
Add the following fields for customers to complete when registering:</br>
1. Organization Name (Textfield)</br>
2. Contact Phone Number including country code (Textfield)</br>
3. Please select your Company Type (Dropdown)</br>
- CBD Manufacturer</br>
- CBD Brand and Marketing company</br>
- CBD Extractor</br>
- Other</br>
If Other - please specify (Should 1. Organization Name only appear if "Other" is selected )</br>
