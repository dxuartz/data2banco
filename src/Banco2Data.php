<?php
namespace Dxuartz;

class Banco2Data
{
	private $date;
	
	# ------------------------------------------ ------------------------------------------ #
	public final function __construct( $date )
	{
		$this->date = $date;
		return $this;
	}
	
	# ------------------------------------------ ------------------------------------------ #
	public final function toData( $show_time = false )
	{
		$hour = $show_time ? substr( $this->date, 10, 9 ) : '';
		$date = substr( $this->date, 0, 10 );
		
		if ( substr( $date, 2, 1 ) == '/' )
		{
			return $date . $hour;
		}
		else
		{
			return ( implode( '/', array_reverse( explode( '-', $date ) ) ) ) . $hour;
		}
	}
	
	# ------------------------------------------ ------------------------------------------ #
	public final function toBanco( $show_time = false )
	{
		$hour = $show_time ? substr( $this->date, 10, 9 ) : '';
		$date = substr( $this->date, 0, 10 );
		
		if ( substr( $date, 4, 1 ) == '-' )
		{
			return $date . $hour;
		}
		else
		{
			return ( implode( '-', array_reverse( explode( '/', $date ) ) ) ) . $hour;
		}
	}
}