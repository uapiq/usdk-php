# Changelog

## 0.1.0 (2026-05-13)

Full Changelog: [v0.0.1...v0.1.0](https://github.com/uapiq/usdk-php/compare/v0.0.1...v0.1.0)

### ⚠ BREAKING CHANGES

* use aliases for phpstan types
* improve identifier renaming for names that clash with builtins
* use camel casing for all class properties
* **client:** redesign methods

### Features

* add `BaseResponse` class for accessing raw responses ([306c949](https://github.com/uapiq/usdk-php/commit/306c949cf1e68d7800a61d3d654c2b4e77f17b5b))
* add idempotency header support ([66aaefd](https://github.com/uapiq/usdk-php/commit/66aaefd06e4c943d57ceae2f7980bc11778acb37))
* allow both model class instances and arrays in setters ([b65ad8a](https://github.com/uapiq/usdk-php/commit/b65ad8ad17bef545e01029da2e18d6b0fd960e79))
* **client:** redesign methods ([b763147](https://github.com/uapiq/usdk-php/commit/b7631476f8b5a8c9a278712b6f3b09a6fb21afaf))
* improve identifier renaming for names that clash with builtins ([dafd7dd](https://github.com/uapiq/usdk-php/commit/dafd7dd8857f4ec337b20e4a1c3b1968c789af70))
* split out services into normal & raw types ([e285a45](https://github.com/uapiq/usdk-php/commit/e285a4535bcd54229ea5e808dcebc96474c7ab4f))
* support unwrapping envelopes ([2b0eb55](https://github.com/uapiq/usdk-php/commit/2b0eb5558fea8b3d5cba3be6806bed34febbd3a1))
* use aliases for phpstan types ([5595422](https://github.com/uapiq/usdk-php/commit/5595422d55a7289a5ed9fcba429f0df8fd15e412))
* use camel casing for all class properties ([02fdc69](https://github.com/uapiq/usdk-php/commit/02fdc6921d3e6a959fd67fe764d2b1257ffb436a))


### Bug Fixes

* a number of serialization errors ([cf8dbb7](https://github.com/uapiq/usdk-php/commit/cf8dbb744b7b106666962ba2a2c6810f97e9841b))
* correctly serialize dates ([bd76846](https://github.com/uapiq/usdk-php/commit/bd76846ab7a8e7798561a77f365b44b28f62a942))
* phpStan linter errors ([536f463](https://github.com/uapiq/usdk-php/commit/536f4636f196c173065e8ce391e675fb3e5b9872))
* rename invalid types ([01f266a](https://github.com/uapiq/usdk-php/commit/01f266a17ba4234fa901b614cea66c9cef2d80a1))
* support arrays in query param construction ([9fc862b](https://github.com/uapiq/usdk-php/commit/9fc862b32e7c8bfc33679b83299ab927eb9157c3))


### Chores

* be more targeted in suppressing superfluous linter warnings ([ebff6a6](https://github.com/uapiq/usdk-php/commit/ebff6a6b6fc9df094edd2a90b3d5cd80c6cbdbf9))
* **client:** refactor error type constructors ([27a50b1](https://github.com/uapiq/usdk-php/commit/27a50b1fdc5054796ee757ef3947629eef5bb3ac))
* configure new SDK language ([a918945](https://github.com/uapiq/usdk-php/commit/a918945419c2a74c31e3f2c621b64c8c8e64480b))
* **internal:** codegen related update ([d8811df](https://github.com/uapiq/usdk-php/commit/d8811dfff9f87d8807274d83e310b3e965c66953))
* **internal:** codegen related update ([54a4daa](https://github.com/uapiq/usdk-php/commit/54a4daa61e57660da69732f983c1e16c3807c59e))
* **internal:** codegen related update ([9015bc3](https://github.com/uapiq/usdk-php/commit/9015bc38c173eb6107444a846256ca30221adf71))
* **internal:** codegen related update ([e562da1](https://github.com/uapiq/usdk-php/commit/e562da15c2c6352dd9ab31ccb19871b0df007f88))
* **internal:** codegen related update ([9ffcc5a](https://github.com/uapiq/usdk-php/commit/9ffcc5a4d30a098acb3a7ff82517555330b08884))
* **internal:** codegen related update ([3375e4b](https://github.com/uapiq/usdk-php/commit/3375e4bb05352a8e42094ed7442d38e9af4da61e))
* **internal:** codegen related update ([b54d4bd](https://github.com/uapiq/usdk-php/commit/b54d4bd2a073ee0ce3cc087a6ffc7245265dcc4c))
* **internal:** codegen related update ([1be757e](https://github.com/uapiq/usdk-php/commit/1be757ed927605a7d6eb392e46694a5c3389bf90))
* **internal:** codegen related update ([7755e83](https://github.com/uapiq/usdk-php/commit/7755e83cfaf5b9e9f1bd87fee9a70dc674d8c8da))
* **internal:** codegen related update ([31f3689](https://github.com/uapiq/usdk-php/commit/31f36893624c679fd3a02c52b95f25058dcf951c))
* **internal:** codegen related update ([eb43832](https://github.com/uapiq/usdk-php/commit/eb438324a197782cbe932c7c4776eff9c1ee3a92))
* **internal:** codegen related update ([6918c25](https://github.com/uapiq/usdk-php/commit/6918c25d66eea4829ab7bd56bd0c05009bcc1dba))
* **internal:** codegen related update ([c0c3327](https://github.com/uapiq/usdk-php/commit/c0c3327aa7cefba3739ebbac3bea3a98df718680))
* **internal:** codegen related update ([f08174a](https://github.com/uapiq/usdk-php/commit/f08174a2dfdf51980d079fdd1a55b8e9cbfaee81))
* **internal:** codegen related update ([ea6bfe1](https://github.com/uapiq/usdk-php/commit/ea6bfe1fda6ef01458ea6eca5defdc135967f55c))
* **internal:** codegen related update ([b5e4f91](https://github.com/uapiq/usdk-php/commit/b5e4f913317d65e3ebb93c5282a6ca43d24ab486))
* **internal:** codegen related update ([131af3b](https://github.com/uapiq/usdk-php/commit/131af3b254b3ffa58014734ddff8ec072e736cbe))
* **internal:** codegen related update ([88059e6](https://github.com/uapiq/usdk-php/commit/88059e6d761db57ae0b57a9a4df5ad60353048c0))
* **internal:** codegen related update ([3259042](https://github.com/uapiq/usdk-php/commit/32590422fdc027889a6083f34afbbee2b3463c22))
* **internal:** codegen related update ([ee269c8](https://github.com/uapiq/usdk-php/commit/ee269c85fc3c27887ff8fe02d276cc70107402a1))
* **internal:** codegen related update ([b9f9cce](https://github.com/uapiq/usdk-php/commit/b9f9cce98f04f725d992cc6c869f21afa63e462b))
* **internal:** codegen related update ([4b71246](https://github.com/uapiq/usdk-php/commit/4b712465e408207c2070c14a3fb39e1b05b4a749))
* **internal:** codegen related update ([2c509ae](https://github.com/uapiq/usdk-php/commit/2c509ae9b60973cb4de640b37812736040f7e498))
* **internal:** codegen related update ([8d40c7b](https://github.com/uapiq/usdk-php/commit/8d40c7bdb801b3fb26196f1f9da74a060abca9ac))
* **internal:** codegen related update ([16be29e](https://github.com/uapiq/usdk-php/commit/16be29e3d87492ce97edee389dd83e35876d127a))
* **internal:** codegen related update ([a135586](https://github.com/uapiq/usdk-php/commit/a13558660c52e928c0fd44f5f37f67769d893459))
* **internal:** codegen related update ([c67c39f](https://github.com/uapiq/usdk-php/commit/c67c39fb616cf52be57826fa63e5282517675a86))
* **internal:** refactor auth by moving concern from base client into client ([f4d7e65](https://github.com/uapiq/usdk-php/commit/f4d7e657690c2bfd55b7d21202120536a9058bd3))
* **internal:** remove mock server code ([7de2cfe](https://github.com/uapiq/usdk-php/commit/7de2cfe92bffd3a88c7bc848ed7d9ac4649b92ee))
* switch from `#[Api(optional: true|false)]` to `#[Required]|#[Optional]` for annotations ([b4f51e3](https://github.com/uapiq/usdk-php/commit/b4f51e3a71c57c56c58b56df9d8674cd5da3e101))
* update mock server docs ([f1a66cf](https://github.com/uapiq/usdk-php/commit/f1a66cf000bc3ed53654f6ef7a3d2a5938b6946b))
* update SDK settings ([de149b8](https://github.com/uapiq/usdk-php/commit/de149b8623373f3d6bc3b4e628a2afc231db3699))
* use `$self = clone $this;` instead of `$obj = clone $this;` ([b4d003d](https://github.com/uapiq/usdk-php/commit/b4d003df5fecd5a8f79214cad69b3f0e4aedd064))
* use non-trivial test assertions ([23ed49c](https://github.com/uapiq/usdk-php/commit/23ed49c5b8b891cea62e65ee8489ab1b66606f6f))
* use single quote strings ([c70b88c](https://github.com/uapiq/usdk-php/commit/c70b88cb4efc90219308743b0de8e2098fe57d0e))
