<?php
# Generated by the protocol buffer compiler (spiral/grpc). DO NOT EDIT!
# source: service.proto
 
namespace Service;

use Spiral\GRPC\ContextInterface;

interface EchoInterface 
{
	/**
     * @param ContextInterface $ctx
     * @param Message $in
	 * @return Message
	 *
     * @throws \Spiral\GRPC\Exception\InvokeException
     */
	public function Ping(ContextInterface $ctx, Message $in): Message;
}