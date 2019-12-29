<?php

namespace AlibabaCloud\Ocr\V20191230;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method RecognizeAccountPage recognizeAccountPage(array $options = [])
 * @method RecognizeBankCard recognizeBankCard(array $options = [])
 * @method RecognizeBusinessCard recognizeBusinessCard(array $options = [])
 * @method RecognizeBusinessLicense recognizeBusinessLicense(array $options = [])
 * @method RecognizeCharacter recognizeCharacter(array $options = [])
 * @method RecognizeDriverLicense recognizeDriverLicense(array $options = [])
 * @method RecognizeDrivingLicense recognizeDrivingLicense(array $options = [])
 * @method RecognizeIdentityCard recognizeIdentityCard(array $options = [])
 * @method RecognizeLicensePlate recognizeLicensePlate(array $options = [])
 * @method RecognizeStamp recognizeStamp(array $options = [])
 * @method RecognizeTable recognizeTable(array $options = [])
 * @method RecognizeTaxiInvoice recognizeTaxiInvoice(array $options = [])
 * @method RecognizeTrainTicket recognizeTrainTicket(array $options = [])
 * @method RecognizeVINCode recognizeVINCode(array $options = [])
 */
class OcrApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ocr';

    /** @var string */
    public $version = '2019-12-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ocr';
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeAccountPage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeBankCard extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeBusinessCard extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeBusinessLicense extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getOutputProbability()
 * @method string getImageURL()
 * @method string getImageContent()
 * @method string getMinHeight()
 */
class RecognizeCharacter extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputProbability($value)
    {
        $this->data['OutputProbability'] = $value;
        $this->options['form_params']['OutputProbability'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinHeight($value)
    {
        $this->data['MinHeight'] = $value;
        $this->options['form_params']['MinHeight'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getSide()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeDriverLicense extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['form_params']['Side'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getSide()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeDrivingLicense extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['form_params']['Side'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getSide()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeIdentityCard extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSide($value)
    {
        $this->data['Side'] = $value;
        $this->options['form_params']['Side'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeLicensePlate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeStamp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getUseFinanceModel()
 * @method string getSkipDetection()
 * @method string getOutputFormat()
 * @method string getImageContent()
 * @method string getAssureDirection()
 * @method string getHasLine()
 * @method string getImageType()
 * @method string getImageURL()
 */
class RecognizeTable extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseFinanceModel($value)
    {
        $this->data['UseFinanceModel'] = $value;
        $this->options['form_params']['UseFinanceModel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSkipDetection($value)
    {
        $this->data['SkipDetection'] = $value;
        $this->options['form_params']['SkipDetection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutputFormat($value)
    {
        $this->data['OutputFormat'] = $value;
        $this->options['form_params']['OutputFormat'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssureDirection($value)
    {
        $this->data['AssureDirection'] = $value;
        $this->options['form_params']['AssureDirection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHasLine($value)
    {
        $this->data['HasLine'] = $value;
        $this->options['form_params']['HasLine'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeTaxiInvoice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method string getImageURL()
 * @method string getImageContent()
 */
class RecognizeTrainTicket extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageType($value)
    {
        $this->data['ImageType'] = $value;
        $this->options['form_params']['ImageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageURL($value)
    {
        $this->data['ImageURL'] = $value;
        $this->options['form_params']['ImageURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getImageType()
 * @method $this withImageType($value)
 * @method string getImageURL()
 * @method $this withImageURL($value)
 * @method string getImageContent()
 * @method $this withImageContent($value)
 */
class RecognizeVINCode extends Rpc
{
}
