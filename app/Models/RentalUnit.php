// app/RentalUnit.php

public function tenant()
{
    return $this->belongsTo(Tenant::class);
}
