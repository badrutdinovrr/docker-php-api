<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class VolumesCreatePostBody
{
    /**
     * The new volume's name. If not specified, Docker generates a name.
     *
     * @var string
     */
    protected $name;
    /**
     * Name of the volume driver to use.
     *
     * @var string
     */
    protected $driver = 'local';
    /**
     * A mapping of driver options and values. These options are passed directly to the driver and are driver specific.
     *
     * @var string[]
     */
    protected $driverOpts;
    /**
     * User-defined key/value metadata.
     *
     * @var string[]
     */
    protected $labels;

    /**
     * The new volume's name. If not specified, Docker generates a name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The new volume's name. If not specified, Docker generates a name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Name of the volume driver to use.
     *
     * @return string
     */
    public function getDriver(): ?string
    {
        return $this->driver;
    }

    /**
     * Name of the volume driver to use.
     *
     * @param string $driver
     *
     * @return self
     */
    public function setDriver(?string $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * A mapping of driver options and values. These options are passed directly to the driver and are driver specific.
     *
     * @return string[]
     */
    public function getDriverOpts(): ?\ArrayObject
    {
        return $this->driverOpts;
    }

    /**
     * A mapping of driver options and values. These options are passed directly to the driver and are driver specific.
     *
     * @param string[] $driverOpts
     *
     * @return self
     */
    public function setDriverOpts(?\ArrayObject $driverOpts): self
    {
        $this->driverOpts = $driverOpts;

        return $this;
    }

    /**
     * User-defined key/value metadata.
     *
     * @return string[]
     */
    public function getLabels(): ?\ArrayObject
    {
        return $this->labels;
    }

    /**
     * User-defined key/value metadata.
     *
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(?\ArrayObject $labels): self
    {
        $this->labels = $labels;

        return $this;
    }
}
