<?php namespace EndyJasmi\Neo4j;

use EndyJasmi\Neo4j\Manager\FactoryManagerInterface;
use InvalidArgumentException;

interface RequestInterface extends
    CollectionInterface,
    FactoryManagerInterface
{
    /**
     * Request constructor
     *
     * @param FactoryInterface $factory
     * @param ConnectionInterface $connection
     */
    public function __construct(FactoryInterface $factory, ConnectionInterface $connection);
    /**
     * Begin transaction
     *
     * @return ResponseInterface
     */
    public function beginTransaction();

    /**
     * Commit transaction
     *
     * @return ResponseInterface
     */
    public function commit();

    /**
     * Execute transaction
     *
     * @return ResponseInterface
     */
    public function execute();

    /**
     * Get connection instance
     *
     * @return ConnectionInterface
     */
    public function getConnection();

    /**
     * Get response instace
     *
     * @return ResponseInterface
     */
    public function getResponse();

    /**
     * Pop statement instance
     *
     * @return StatementInterface
     */
    public function popStatement();

    /**
     * Push statement instance
     *
     * @param StatementInterface
     * @return RequestInterface
     */
    public function pushStatement(StatementInterface $statement);

    /**
     * Set connection instance
     *
     * @param ConnectionInterface $connection
     * @return RequestInterface
     */
    public function setConnection(ConnectionInterface $connection);

    /**
     * Set response instance
     *
     * @param ResponseInterface
     * @return RequestInterface
     */
    public function setResponse(ResponseInterface $response);

    /**
     * Create and push statement into request
     *
     * @param string $query
     * @param array $parameters
     * @return RequestInterface
     * @throws InvalidArgumentException If $query is not string
     */
    public function statement($query, array $parameters = []);
}
