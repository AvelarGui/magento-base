<?php
namespace Magento\Customer\Controller\Account\CreatePost;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Account\CreatePost
 */
class Interceptor extends \Magento\Customer\Controller\Account\CreatePost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Customer\Helper\Address $addressHelper, \Magento\Framework\UrlFactory $urlFactory, \Magento\Customer\Model\Metadata\FormFactory $formFactory, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Magento\Customer\Api\Data\RegionInterfaceFactory $regionDataFactory, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressDataFactory, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Customer\Model\Url $customerUrl, \Magento\Customer\Model\Registration $registration, \Magento\Framework\Escaper $escaper, \Magento\Customer\Model\CustomerExtractor $customerExtractor, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Customer\Model\Account\Redirect $accountRedirect, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, ?\Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $scopeConfig, $storeManager, $accountManagement, $addressHelper, $urlFactory, $formFactory, $subscriberFactory, $regionDataFactory, $addressDataFactory, $customerDataFactory, $customerUrl, $registration, $escaper, $customerExtractor, $dataObjectHelper, $accountRedirect, $customerRepository, $formKeyValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function createCsrfValidationException(\Magento\Framework\App\RequestInterface $request) : ?\Magento\Framework\App\Request\InvalidRequestException
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createCsrfValidationException');
        if (!$pluginInfo) {
            return parent::createCsrfValidationException($request);
        } else {
            return $this->___callPlugins('createCsrfValidationException', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateForCsrf(\Magento\Framework\App\RequestInterface $request) : ?bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateForCsrf');
        if (!$pluginInfo) {
            return parent::validateForCsrf($request);
        } else {
            return $this->___callPlugins('validateForCsrf', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute();
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        if (!$pluginInfo) {
            return parent::dispatch($request);
        } else {
            return $this->___callPlugins('dispatch', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        if (!$pluginInfo) {
            return parent::getActionFlag();
        } else {
            return $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        if (!$pluginInfo) {
            return parent::getRequest();
        } else {
            return $this->___callPlugins('getRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        if (!$pluginInfo) {
            return parent::getResponse();
        } else {
            return $this->___callPlugins('getResponse', func_get_args(), $pluginInfo);
        }
    }
}