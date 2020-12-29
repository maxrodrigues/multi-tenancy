# App de Cadatro de Categoria
## Sobre a aplicação
Essa é uma aplicação Multi Tenancy Single DataBase, criada para estudo e comparação com outros modos de desenvolvimento de aplicações semelhantes.

Ela divide 3 usuários, um usuário master e dois tenants que tem acesso as categorias que foram criadas. Cada usuário, enxerga somente as categorias cadastradas por eles.

Não foi adicionado nenhum outro tipo de validação ou ACL.

<p align="center">
<img src="https://img.shields.io/github/issues/maxrodrigues/multi-tenancy?style=for-the-badge">
<img src="https://img.shields.io/github/forks/maxrodrigues/multi-tenancy?style=for-the-badge">
<img src="https://img.shields.io/github/stars/maxrodrigues/multi-tenancy?style=for-the-badge">
<img src="https://img.shields.io/github/license/maxrodrigues/multi-tenancy?style=for-the-badge">
<img src="https://img.shields.io/twitter/url?style=for-the-badge&url=https%3A%2F%2Ftwitter.com%2FMax_Rodrigues">
</p>

## Comandos para instalação da aplicação
Ao clonar a aplicação
> Composer install

Após criar o banco dados
> php artisan migrate --seed

## Usuários padrão aplicação
### Usuário master
- **email:** admin@user.com **senha:** password

### Usuários Tenant
- **email:** client1@user.com **senha:** password
- **email:** client2@user.com **senha:** password

