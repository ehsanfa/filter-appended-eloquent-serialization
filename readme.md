# Filtering appended values via Eloquent Serialization

Using this trait you can filter what appends to your json serialized response. And it doesn't simply splice it from the response, It tells to Eloqent that only consider these attributes to be appended to the response.

## How it works

You only need to use `App\Toolbox\FilterAppends` trait in your model and whenever you retrieve data through your model call the `appends` method like this: 

```
App\User::appends('last_name', 'birth_year')->get();
```

And regardless to what actually is defined in your model as the `$appends` object, the model only considers `last_name` and `birth_year` as appended.

You can find the detailed document [here](https://ehsanfazeli.com/post/Filtering-appended-values-via-Eloquent-Serialization/).