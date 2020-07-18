;; Hello Name function
;; Date 18/07/2020
;; Author - Lorenzo benedetto
( defn hello_name
  ( [] ( hello_name "world" )) ; case without arguments
  ( [& args] ( apply println "Hello" args )) ; case with a variable number of arguments
)