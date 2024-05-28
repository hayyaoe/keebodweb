<div>
    @foreach($customOrders as $customOrder)
        <p class="text-black font-bold">{{ $customOrder->type->name }}</p>
        <p class="text-black font-bold">{{ $customOrder->caseType->name }}</p>
        <p class="text-black font-bold">{{ $customOrder->keyswitch->name }}</p>
        <p class="text-black font-bold">{{ $customOrder->connection->name }}</p>
        <p class="text-black font-bold">{{ $customOrder->assembly->name }}</p>
    @endforeach
</div>
