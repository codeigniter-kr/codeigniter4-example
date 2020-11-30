# codeigniter4 Modules
## 설명
- codeigniter4에 모듈을 추가합니다.

## 사용법
- 저장소의 소스를 다운받습니다.
- `Modules`를 `spark`가 있는 위치에 업로드 합니다.
- `app/Config/Autoload.php`를 열어 다음과 같이 추가합니다.
```php
public function __construct()
{
    parent::__construct();
    $ModuleKey = ROOTPATH . 'Modules';
    require_once str_replace('\\', DIRECTORY_SEPARATOR, $ModuleKey.DIRECTORY_SEPARATOR.'Modules.php');
}
```

## 테스트
- http://example.com/admin
- http://example.com/user