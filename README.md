Test

`bin/console inanzzz:dictate-structure`
- Dictated
- src\Controller
- src\Repository
- src\Factory

You can override values below by creating a configuration file under config/packages directory as seen below.


config/packages/migo2468.yaml
 
`
migo2468:
    test_external:
        controller: 'src\App\Controller'
        repository: 'src\App\Repository'
        factory: 'src\App\Factory'
`

Let's test our command again.


`bin/console inanzzz:dictate-structure`
- Dictated
- src\App\Controller
- src\App\Repository
- src\App\Factory
