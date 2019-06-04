# Laravel-Province-City-Area   全国省市县数据(数据来源于京东，内置爬虫，可自行获取最新数据)

这是一个提供全国省市县数据的轮子

试过了很多数据来源(国家统计局、网上其他开发者提供的json等),发现还是会有小部分省市有遗漏。

这个包的数据是**来自于京东**，相对来说会更准确、详尽一些。


> 内部自带京东省市县数据爬虫，用户可以自行运行爬取最新的省市县数据




#### 添加provider
将`Aoxiang\Pca\ProvinceCityAreaServiceProvider::class`复制到`config.php`内`providers`数组内

#### 生成数据库迁移文件：

```
php artisan vendor:publish --provider="Aoxiang\Pca\ProvinceCityAreaServiceProvider" --tag="migrations"
```
