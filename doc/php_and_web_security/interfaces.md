# Doc

* http://php.net/manual/en/language.oop5.interfaces.php
* 

# Snippets 

**Name collision**
```
Prior to PHP 5.3.9, a class could not implement two interfaces that specified a method with the same name, since it would cause ambiguity. More recent versions of PHP allow this as long as the duplicate methods have the same signature.
```

**Parameter names and default values**
```
If it's not already obvious, it's worth noticing that the parameters in the interface's method declaration do not have to have the same names as those in any of its implementations.

More significantly, default argument values may be supplied for interface method parameters, and they have to be if you want to use default argument values in the implemented classes:
```
[See the snippet](../src/snippets/interface_default_values.php)

**Exact implementations**
```
Implementation must be strict, subtypes are not allowed.
"The class implementing the interface must use the EXACT SAME METHOD SIGNATURES as are defined in the interface. Not doing so will result in a fatal error. "
```

# Resources

# Questions

# Articles

* The *I* in SOL**I**D is for *Interface Segregation Principle*
** [Interface Segregation Principle (Wikipedia)]](https://en.wikipedia.org/wiki/Interface_segregation_principle)