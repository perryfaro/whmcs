# WHMCS SDK (unofficial)

## Usage

#### setup Authentication

```
$authentication = new Whmcs\Authentication\Authentication;
$authentication->setUrl('https://www.example.com/');
$authentication->setPassword('password');
$authentication->setUsername('username');
```

#### Making a request

Below you will see three ways of making a request.

Option 1:

```
$class = new Whmcs\Whmcs($authentication);
$class->client()->getClients()->request();
```

Option 2:

```
$class = new Whmcs\Client\Client($authentication);
$class->getClients()->request();
```

Option 3:

```
$class = new Whmcs\Client\Options\GetClients($authentication);
$class->request();
```