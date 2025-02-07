function evaluate(n){
          if(n==1){
                    return 1;
          }
          return n/factorial(n)+evaluate(n-1);
}

function factorial(n){
          if(n==1 || n==0){
                    return 1;
          }
          return n*factorial(n-1);
}

console.log(evaluate(500));