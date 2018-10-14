namespace BolCom\RetailerApi\Model\Invoice {
    data Period = String deriving(FromString, ToString) where
        _: | !\BolCom\RetailerApi\Model\Invoice\Assert\AssertPeriod::execute($value) => 'Could not create period';

    data InvoiceId = Int deriving(FromScalar, ToScalar);
}

namespace BolCom\RetailerApi\Model\Invoice\Query {
    data GetInvoice = GetInvoice {
        \BolCom\RetailerApi\Model\Invoice\InvoiceId $invoiceId
    };

    data GetInvoiceList = GetInvoiceList {
        \BolCom\RetailerApi\Model\Invoice\Period $period
    };

    data GetInvoiceSpecification = GetInvoiceSpecification {
        \BolCom\RetailerApi\Model\Invoice\InvoiceId $invoiceId,
        int $page
    };
}

namespace BolCom\RetailerApi\Model\Invoice\Command {

}